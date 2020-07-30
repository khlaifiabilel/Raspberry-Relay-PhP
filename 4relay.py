#!/usr/bin/python
import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)

# init list with pin numbers

pinList = [2, 3, 4, 27]

# loop through pins and set mode and state to 'high'

for i in pinList:
    GPIO.setup(i, GPIO.OUT)
    GPIO.output(i, GPIO.HIGH)

# time to sleep between operations in the main loop

SleepTimeL = 2

# main loop

try:
  GPIO.output(2, GPIO.LOW)
  print ("relay 1")
  time.sleep(SleepTimeL);
  GPIO.output(3, GPIO.LOW)
  print ("relay 2")
  time.sleep(SleepTimeL);
  GPIO.output(4, GPIO.LOW)
  print ("relay 3")
  time.sleep(SleepTimeL);
  GPIO.output(27, GPIO.LOW)
  print ("relay 4")
  time.sleep(SleepTimeL);
  GPIO.cleanup()

# End program cleanly with keyboard
except KeyboardInterrupt:
  print ("  Quit")

  # Reset GPIO settings
  GPIO.cleanup()
