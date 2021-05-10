# Sollution 1
num1 = int(input())
num2 = int(input())
num3 = int(input())
result = str(num1 * num2 * num3)

for i in range(10):
    print(result.count(str(i)))

# Sollution 2
import sys
number = list(map(int, sys.stdin.readline().rstrip().split()))
result = str(number[0] * number[1] * number[2])

for i in range(10):
    print(result.count(str(i)))