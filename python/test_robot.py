#!/usr/bin/env python

#####################################################################
#####################################################################
########## Programme de depot d'un bouchon pour le robot 2 ##########
#####################################################################
#####################################################################

# ! You need to launch the server first !

from pymodbus.client.sync import ModbusTcpClient
import time


# Positive number : 0 - 32767
# Negative number : 32768 - 65535
def number_to_raw_data(val):
    if val < 0:                     #connexion
        val = (1 << 15) - val
    return val


def raw_data_to_number(val):
    if (val >> 15) == 1:
        val = - (val & 0x7FFF)
    return val

def mouvement(joint1, joint2, joint3, joint4, joint5, joint6):      # mouvement robot 2
    # Wait for end of Move command
    while client.read_holding_registers(150, count=1).registers[0] == 1:     # 150 = Drapeau de commande en cours d’exécution
        time.sleep(1)

    print ("Joint Move command is finished")
    

    joints = [joint1, joint2, joint3, joint4, joint5, joint6]
    joints_to_send = list(map(lambda j: int(number_to_raw_data(j * 1000)), joints))     #mouvement des 6 axes
    print (joints_to_send)
    
    client.write_registers(0, joints_to_send)       #Axes (mrad) qui prend la liste
    client.write_register(100, 1)           #Envoie une commande de mouvement d’axe avec les valeurs stockées dans Axes
    
def prise_flacon_plein():                    # fonction flacon plein
    client.write_register(500, 11)           # Mettre à jour l’identifiant de l’accessoire branché (gripper 1 : 11°
    time.sleep(1)                            # suspend la fonction pendant une seconde
    client.write_register(401, 300)          # Vitesse d’ouverture de la pince (100-1000) ici 300
    time.sleep                               # suspend la fonction
    client.write_register(510, 1)            # Ouvrir la pince précédemment mise à jour
    time.sleep(1)                            # suspend la fonction pendant une seconde
    mouvement(0, 0.5, -1.25, 0, 0, 0)
    mouvement(0.799,   -0.551,   0.124,   -0.015,    -1.117,   0.759)
    client.write_register(510, 1)
    time.sleep(1)
    mouvement(0.801, -0.651, 0.01, -0.017, -0.911, 0.729)
    mouvement(0.799, -0.731, 0.009, -0.026, -0.811, 0.729)
    client.write_register(511, 1)
    time.sleep(1)
    mouvement(0.801, -0.651, 0.01, -0.017, -0.911, 0.729)
    mouvement(-0.005, -0.071, -0.005, -0.037, -1.519, 0.02)

    time.sleep(1)
    mouvement(-0.508, -0.518, -0.111, -0.012, -0.902, -0.456)

    mouvement(-0.498, -0.642, -0.121, -0.032, -0.829, -0.471)
    client.write_register(511, 1) 

    mouvement(-0.444, -0.454, -0.122, -0.037, -0.977, -0.385)

    time.sleep(1)
    mouvement(0, 0.5, -1.25, 0, 0, 0)






if __name__ == '__main__':
    print ("--- START")
    client = ModbusTcpClient('192.168.5.200', port=5020)

    client.connect()
    print ("Connected to modbus server")

    print ("Calibrate Robot if needed")
    client.write_register(311, 1)            #Demarrage d’une calibration automatique
    time.sleep(1)
    
    
    
             # depose le bouchon pour chaque flacon
        
        
prise_flacon_plein()
        
        
       