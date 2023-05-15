#!/usr/bin/env python

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


if __name__ == '__main__':
    print ("--- START")
    client = ModbusTcpClient('192.168.5.200', port=5020)

    client.connect()
    print ("Connected to modbus server")

    print ("Calibrate Robot if needed")
    client.write_register(311, 1)
    time.sleep(1)

    # Wait for end of calibration
    while client.read_input_registers(402, 1).registers[0] == 1:
        time.sleep(1)

    print ("Send a Joint Move command to the robot")
    joints = [-1.2, 0.13, 0.78, 0, 0, 0]
    joints_to_send = list(map(lambda j: int(number_to_raw_data(j * 1000)), joints))
    print (joints_to_send)

    client.write_registers(0, joints_to_send)
    client.write_register(100, 1)

    # Wait for end of Move command
    while client.read_holding_registers(150, count=1).registers[0] == 1:
        time.sleep(1)

    print ("Joint Move command is finished")

    client.write_register(402, 100)
    time.sleep(2)
    client.write_register(401, 100)
    

    joints = [0.5, 0.2, 0.98, -1.0, -1.2, 1.0]
    joints_to_send = list(map(lambda j: int(number_to_raw_data(j * 1000)), joints))
    print (joints_to_send)

    client.write_registers(0, joints_to_send)
    client.write_register(100, 1)

    # Wait for end of Move command
    while client.read_holding_registers(150, count=1).registers[0] == 1:
        time.sleep(1)

   
    joints = [1.3, 0.05, 0.22, 0.85, 0.0, 0.0]
    joints_to_send = list(map(lambda j: int(number_to_raw_data(j * 1000)), joints))
    print (joints_to_send)

    client.write_registers(0, joints_to_send)
    client.write_register(100, 1)

    # Wait for end of Move command
    while client.read_holding_registers(150, count=1).registers[0] == 1:
        time.sleep(1)




    joints = [0.0, 0.0, -1.2, 0.0, 0.0, 0.0]
    joints_to_send = list(map(lambda j: int(number_to_raw_data(j * 1000)), joints))
    print (joints_to_send)

    client.write_registers(0, joints_to_send)
    client.write_register(100, 1)

    # Wait for end of Move command
    while client.read_holding_registers(150, count=1).registers[0] == 1:
        time.sleep(1)

    # Activate learning mode
    client.write_register(300, 1)

    client.close()
    print ("Close connection to modbus server")
    print ("--- END")
