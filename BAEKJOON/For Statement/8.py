import sys

count = int(sys.stdin.readline().rstrip())
for i in range(count):
    n = sys.stdin.readline().rstrip().split(' ')
    print("Case #{}: {} + {} = {}".format(i+1, n[0], n[1], int(n[0]) + int(n[1])))