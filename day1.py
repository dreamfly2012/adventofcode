f = open("day1.input")
line = f.readline()
total = 0
max = 0
while line:
    line = line.strip("\n")
    if line=='':
        max = max if max>total else total
        total = 0
    else:
        line = int(line)
        total+=line
    line = f.readline()

print(max)
