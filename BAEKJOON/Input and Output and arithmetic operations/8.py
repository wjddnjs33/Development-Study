n = int(input())
p = input()
result = []

result.append(n * int(p[2]))
result.append(n * int(p[1]))
result.append(n * int(p[0]))

print(result[0])
print(result[1])
print(result[2])
print(result[0] + (result[1]*10) + (result[2]*100))