count = int(input())

for i in range(count):
    sum, value = 0, 0
    q = input()
    for j in range(len(q)):
        if q[j] == 'O':
            value += 1
        else:
            value = 0
        sum += value
    print(sum)