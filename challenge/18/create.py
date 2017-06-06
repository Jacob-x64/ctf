import sys

if (len(sys.argv) < 4):
	print "USAGE: " + sys.argv[0] + " '<input text>' <bytes to shift> <output file name>"
	exit()

input = list(sys.argv[1])
output = ""
shifts = sys.argv[2]

fout = open(sys.argv[3], 'w+b')

for byte in input:
	i = (ord(byte)+int(shifts))	
	fout.write(chr(i))

fout.close()

