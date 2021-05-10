# Sollution 1
number_arr = []
for i in range(9):
    number_arr.append(int(input()))

max_value = number_arr[0]
max_value_index = 0

for i in range(len(number_arr)):
    if max_value < number_arr[i]:
        max_value = number_arr[i]
        max_value_index = i + 1
        
print(max_value)
print(max_value_index)

# Sollution 2
number_arr = []
for i in range(9):
    number_arr.append(int(input()))
        
print(max(number_arr))
print(number_arr.index(max(number_arr))+1)