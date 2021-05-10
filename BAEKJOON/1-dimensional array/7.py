test_count = int(input())

for i in range(test_count):
    sum, up_score = 0, 0
    information = list(map(int, input().split()))
    for j in range(1, len(information)):
        sum += information[j]
    avg = sum/information[0]

    for j in range(1, len(information)):
        if avg < information[j]: up_score += 1
    final = (up_score/information[0])*100
    print("{:.3f}%".format(final))