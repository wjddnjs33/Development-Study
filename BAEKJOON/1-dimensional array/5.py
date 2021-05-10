count = int(input())
score = list(map(int, input().split()))

max_value = score[0]
for s in score:
    if max_value < s:
        max_value = s

sum = 0
for i in range(count):
    sum += score[i]/max_value*100

print(sum/count)
