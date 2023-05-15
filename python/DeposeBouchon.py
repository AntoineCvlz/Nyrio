#!/usr/bin/env python

#####################################################################
#####################################################################
########## Programme de depot d'un bouchon pour le robot 1 ##########
#####################################################################
#####################################################################

# ! You need to launch the server first !

from pymodbus.client.sync import ModbusTcpClient
import time


# Positive number : 0 - 32767
# Negative number : 32768 - 65535
def number_to_raw_data(val):
    if val < 0:
        val = (1 << 15) - val               #connexion
    return val


def raw_data_to_number(val):
    if (val >> 15) == 1:                    #connexion
        val = - (val & 0x7FFF)
    return val

def mouvement(joint1, joint2, joint3, joint4, joint5, joint6):          # on definit la fonction mouvement
    # Wait for end of Move command
    while client.read_holding_registers(150, count=1).registers[0] == 1:    # 150 = Drapeau de commande en cours d’exécution
        time.sleep(1)

    print ("Joint Move command is finished")
    

    joints = [joint1, joint2, joint3, joint4, joint5, joint6]
    joints_to_send = list(map(lambda j: int(number_to_raw_data(j * 1000)), joints))
    print (joints_to_send)
    
    client.write_registers(0, joints_to_send)
    client.write_register(100, 1)           #Envoie une commande de mouvement d’axe avec les valeurs stockées dans Axes
    
def prise_flacon_plein():                   #  on definit une fonction pour la prise d'un flacon plein utilisant la fonction mouvement 
    client.write_register(500, 11)          # Mettre à jour l’identifiant de l’accessoire branché (gripper 1 : 11)
    time.sleep(1)                           # suspend la fonction pendant une seconde
    client.write_register(401, 300)         # Vitesse d’ouverture de la pince (100-1000) ici 300
    time.sleep                              # suspend la fonction
    client.write_register(510, 1)           # Ouvrir la pince précédemment mise à jour
    time.sleep(1)                           # suspend la fonction pendant une seconde
    mouvement(0.006, 0.605, -1.339, 0, 0.018, -0.208)                   #mouvements selon les 6 axes
    mouvement(-1.069, -0.58, 0.358, -0.091, -1.309, -1.189)             
    mouvement(-1.067, -0.625, 0.281, -0.084, -1.221, -1.189)
    client.write_register(500, 11)                             
    time.sleep(1)
    client.write_register(401, 300)
    time.sleep
    client.write_register(511, 1)               #Fermer la pince précédemment mise à jour
    time.sleep(1)
    mouvement(-1.074, -0.591, 0.509, -0.045, -1.476, -1.493)
    mouvement(-0.847, 0.201, -0.571, -0.014, -1.124, -0.369)
    mouvement(-0.002, 0.129, -0.709, 0.018, -0.983, -0.678)


if __name__ == '__main__':
    print ("--- START")
    client = ModbusTcpClient('192.168.5.100', port=5020)

    client.connect()
    print ("Connected to modbus server")

    print ("Calibrate Robot if needed")
    client.write_register(311, 1)       #Demarrage d’une calibration automatique
    time.sleep(1)
    
    
    
    for NumFlacon in range(1, 2) :              # depose le bouchon pour chaque flacon 
        
        
        prise_flacon_plein()            # on appelle la fonction
        
        
        if NumFlacon == 1 :             #1er flacon 
            
            
            mouvement(0.022, -0.241, -0.809, 0.068, -0.556, -0.8)
            
            
            mouvement(0.024, -0.349, -0.821, 0.066, -0.425, -0.8)
            
            
            client.write_register(500, 11)
            time.sleep(1)
            client.write_register(401, 300)
            time.sleep
            client.write_register(510, 1)
            time.sleep(1)
            
            
            mouvement(0.049, 0.04, -0.677, 0.066, -0.897, -0.805)
            
        if NumFlacon == 2 :         #2eme flacon
            
            
            mouvement(0.279, -0.004, -0.703, -0.012, -0.865, -0.607)
            
            
            mouvement(0.243, -0.196, -0.793, -0.02, -0.574, -0.754)
            
            
            mouvement(0.239, -0.347, -0.808, -0.02, -0.418, -0.754)
            
            
            client.write_register(500, 11)
            time.sleep(1)
            client.write_register(401, 300)
            time.sleep
            client.write_register(510, 1)
            time.sleep(1)
            
            
            mouvement(0.259, 0.026, -0.704, -0.038, -0.874, -0.759)
            
        
        if NumFlacon == 3 :         #3eme flacon
            
            
            mouvement(0.408, -0.137, -0.657, -0.014, -0.828, -0.577)
            
            
            mouvement(0.39, -0.416, -0.68, -0.025, -0.561, -0.577)
            
            
            client.write_register(500, 11)
            time.sleep(1)
            client.write_register(401, 300)
            time.sleep
            client.write_register(510, 1)
            time.sleep(1)
            
            
            mouvement(0.426, -0.069, -0.671, -0.028, -0.877, -0.572)
            
        if NumFlacon == 4 :         #4eme flacon
            
            
            mouvement(0.023, -0.291, -0.57, 0.005, -0.771, -0.815)
            
            
            mouvement(0.022, -0.47, -0.594, 0.028, -0.582, -0.815)
            
            
            client.write_register(401, 100)
            
            
            mouvement(0.025, -0.151, -0.495, 0.025, -0.963, -0.815)
            
            
        if NumFlacon == 5 :
            
            
            mouvement(0.208, -0.243, -0.521, -0.029, -0.852, -0.754)
            
            
            mouvement(0.19, -0.458, -0.578, -0.026, -0.576, -0.754)
            
            
            client.write_register(401, 100)
            
            
        if NumFlacon == 6 :
            
            
            mouvement(0.302, -0.158, -0.511, 0.077, -0.808, -0.334)
            
            
            mouvement(0.327, -0.547, -0.542, 0.045, -0.531, -0.466)
            
            
            client.write_register(401, 100)
            
            
            mouvement(0.332, -0.24, -0.559, -0.031, -0.74, -0.714)
            
            
        if NumFlacon == 7 :
            
            
            mouvement(0.061, -0.304, -0.44, -0.061, -0.797, -0.714)
            
            
            mouvement(0.054, -0.523, -0.431, -0.123, -0.651, -0.683)
            
            
            client.write_register(401, 100)
            
            
            mouvement(0.082, -0.247, -0.446, -0.104, -0.852, -0.683)
            
            
        if NumFlacon == 8 :
            
            
            mouvement(0.232, -0.334, -0.298, -0.16, -0.977, -0.405)
            
            
            mouvement(0.196, -0.591, -0.402, -0.117, -0.622, -0.41)
            
            
            client.write_register(401, 100)
            
            
            mouvement(0.178, -0.365, -0.417, -0.103, -0.779, -0.542)
            
            
        if NumFlacon == 9 :
            
            
            mouvement(0.283, -0.364, -0.335, 0.022, -0.857, -0.785)
            
            
            mouvement(0.275, -0.612, -0.341, 0.041, -0.659, -0.81)
            
            
            client.write_register(401, 100)
            
            
            mouvement(0.274, -0.357, -0.331, 0.043, -0.886, -0.795)
            
            
            mouvement(-0.026, 0.337, -1.154, 0.055, 0.092, -0.233)
