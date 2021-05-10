n = input().split(' ')

if int(n[0]) > int(n[1]):
    print('>')
elif int(n[0]) < int(n[1]):
    print('<')
elif int(n[0]) == int(n[1]):
    print('==')