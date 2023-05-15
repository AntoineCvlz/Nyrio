#!/usr/bin/env python

#####################################################################
#####################################################################
##################### Etape 2 RAVOUX du robot 1 #####################
#####################################################################
#####################################################################

# ! You need to launch the server first !

from pymodbus.client.sync import ModbusTcpClient
import time


# Positive number : 0 - 32767
# Negative number : 32768 - 65535
def number_to_raw_data(val):
    if val < 0:
        val = (1 << 15) - val
    return val


def raw_data_to_number(val):
    if (val >> 15) == 1:
        val = - (val & 0x7FFF)
    return val

def mouvement(joint1, joint2, joint3, joint4, joint5, joint6):
    # Wait for end of Move command
    while client.read_holding_registers(150, count=1).registers[0] == 1:
        time.sleep(1)

    print ("Joint Move command is finished")
    

    joints = [joint1, joint2, joint3, joint4, joint5, joint6]
    joints_to_send = list(map(lambda j: int(number_to_raw_data(j * 1000)), joints))
    print (joints_to_send)
    
    client.write_registers(0, joints_to_send)
    client.write_register(100, 1)



if __name__ == '__main__':
    print ("--- START")
    client = ModbusTcpClient('192.168.5.100', port=5020)

    client.connect()
    print ("Connected to modbus server")
 
    print ("Calibrate Robot if needed")
    
    time.sleep(3)
    print("j'ai attendu 3s")
    client.write_coil(4, 0)
    client.write_coil(104, 1)
    client.write_coil(4, 1)
    time.sleep(1)
    rr = client.read_discrete_inputs(104)
    
    while True :
    
        if rr.bits == [True, False, False, False, False, False, False, False] :
        
            client.write_coil(4, 0)
            
            time.sleep(1)
        
            client.write_coil(104, 0)
        
            time.sleep(2)
        
            mouvement(-0.002, 0.129, -0.709, 0.018, -0.983, -0.678)
            
            time.sleep(1)
        
            client.write_coil(101, 0)
            
            time.sleep(1)
        
            client.write_coil(4, True)
        
            break
        
        
        
        
        
        
        
        
        
        
        