count = int(input())
p = list(map(int, input().split()))

minn, maxn = p[0], p[0]
for j in range(count):
    if minn > p[j]:
        minn = p[j]
        
    if maxn < p[j]:
        maxn = p[j]
        
print(minn, maxn)