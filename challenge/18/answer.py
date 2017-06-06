import sys

if (len(sys.argv) < 3):
	print 'USAGE: '+sys.argv[0]+' <file> <offset to shift>'
	exit()

f = open(sys.argv[1],"rb")
input = ""
answer = ""

try:
 	byte = f.read(1)
	while byte != "":
		answer += chr(ord(byte)+ int(sys.argv[2]))
		input += byte
		byte = f.read(1)
finally:
	print answer
	f.close()
