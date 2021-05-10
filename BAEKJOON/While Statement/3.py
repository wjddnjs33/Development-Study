n = input()
cycle = 1
if 99 >= int(n) >= 10:
    f = n
    while(True):
        p = str(int(n[0]) + int(n[1]))
        n = n[1] + p[-1]
        if n == f:
            print(cycle)
            break
        else:
            cycle = cycle + 1
elif 0 <= int(n) < 10:
    n = '0' + n
    f = n
    while(True):
        p = str(int(n[0]) + int(n[1]))
        n = n[1] + p[-1]
        if n == f:
            print(cycle)
            break
        else:
            cycle = cycle + 1