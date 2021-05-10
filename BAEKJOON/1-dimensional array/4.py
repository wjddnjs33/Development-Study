# set 함수를 사용하면 중복 값을 제거 해줌.
result = []
for i in range(10):
    result.append(int(input()) % 42)

print(len(set(result)))