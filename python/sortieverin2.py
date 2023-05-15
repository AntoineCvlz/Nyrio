#!/usr/bin/env python

#####################################################################
#####################################################################
################## Active le vérin pour le robot 2 ##################
#####################################################################
#####################################################################

# ! You need to launch the server first !

from pymodbus.client.sync import ModbusTcpClient
import time
import os

if __name__ == '__main__':

    print ("--- START")
    client = ModbusTcpClient('192.168.5.200', port=5020)

    client.connect()
    print ("Connected to modbus server")
    
    rr = client.read_input_registers(400, 10)
    print (rr.registers)

    rr = client.read_discrete_inputs(100, 6)
    print (rr.bits)

    # Set digital IO mode - output
    client.write_coil(1, 0)

    # Set digital IO state
    client.write_coil(101, 1)

    time.sleep(0.1)

    rr = client.read_discrete_inputs(100, 6)
    print (rr.bits)

    client.close()
    print ("Close connection to modbus server")
    print ("--- END")
