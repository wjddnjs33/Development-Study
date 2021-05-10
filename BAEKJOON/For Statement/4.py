import sys

count = int(sys.stdin.readline().rstrip())
for i in range(count):
    n = sys.stdin.readline().rstrip().split(' ')
    print(int(n[0]) + int(n[1]))
