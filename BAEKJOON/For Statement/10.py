import sys

count = int(sys.stdin.readline().rstrip())
j = 4
for i in range(count, 0, -1):
    print(' '*(i-1) + '*' * (5 - j))
    j = j - 1