import time
import RPi.GPIO as GPIO
from time import sleep
GPIO.setwarnings(False)
GPIO.cleanup()
GPIO.setmode(GPIO.BOARD)
GPIO.setup(11, GPIO.OUT)
GPIO.setup(13, GPIO.OUT)
GPIO.setup(7, GPIO.OUT)
servo=GPIO.PWM(7,50)
#TRIG = 10
#ECHO = 8
GPIO.setup(10, GPIO.OUT)
GPIO.setup(8, GPIO.IN)
print time.strftime("%m/%d %I:%M") 
f = open("/var/www/projet/content.txt", "r");
print f
myvalues = f.readlines()
for line in myvalues:
    print line
while 1:
    if myvalues == time.strftime("%m/%d %I:%M"):
        GPIO.output(13, True)
        
        import ala
        while True:
            GPIO.output(10, False)
            time.sleep(0.3)
            GPIO.output(10, True)
            time.sleep(0.001)
            GPIO.output(10, False)
            while GPIO.input(8)==0:
                signalOff=time.time()

            while GPIO.input(8)==1:
                signalOn=time.time()

            timePassed=signalOn-signalOff
            distance=timePassed*17150
            print (distance), "cm"
            if 2<distance<8:
                GPIO.output(13, False)
                break
        while True:
            servo.start(6)
            GPIO.output(11, True)
            servo.ChangeDutyCycle(2)
            sleep(1)
            servo.ChangeDutyCycle(11)
            sleep(1)
            GPIO.output(11, False)
            break
        break
GPIO.cleanup()
        

    

