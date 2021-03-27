import pyupbit
import sys
import time
from tqdm import tqdm

access_key = 'REDACTED'
secret_key = 'REDACTED'

# upbit 클래스 생성
upbit = pyupbit.Upbit(access_key, secret_key)
## pyupbit 모듈 연결 확인
if pyupbit.Upbit:
    pass
    #print("[+] Connected")
else:
    sys.exit()

Name = 'KRW-AERGO'
Name_v2 = 'AERGO'
Price = 434
number = 22
add_money = 2

# 첫 매수를 통해 최고점 금액을 미리 정함.
# 여기서 정해진 first_price 변수가 사용되는 곳은 다음 매수부터 first_price 가격보다 비싸게 사지 않기 위함.
first_price = 0
def first_p():
    global first_price
    first_price = pyupbit.get_current_price(Name)
    #print("[+] {} 현재 가격 : {}".format(Name, first_price))

## 매수 확인
def my_money():
    result = 0
    m = upbit.get_balances()
    for i in range(len(m)):
        if Name_v2 in m[i]['currency']:
            result = 1
            break
        else:
            pass
    return result

## 보유 수량 확인
coin_num = 0
def check(Na):
    global coin_num
    m = upbit.get_balances()
    for i in range(len(m)):
        if Na in m[i]['currency']:
            coin_num = m[i]['balance']
            break
        
def buy(name, price, num):
    result = 0
    first_p()
    try:
        ret = upbit.buy_limit_order(name, price, num)
        print("[+] 매수 가격 : {}".format(price))
        print("[+] 매수 수량 : {}".format(num))
        if "error" in str(ret):
            e = ret['error']['message']
            print("[+] Error Occur! : {}".format(e))
            result = 0
        else:
            result = 1
    except:
        pass
    return result

# 시장가 매도 
# name이라는 코인을 num 개수만큼 시장가 매도
def sell(name, price, num):
    result = 0
    try:
        ret = upbit.sell_limit_order(name, price, num)
        print("[+] 매도 가격 : {}".format(pyupbit.get_current_price(Name)))
        if "error" in str(ret):
            e = ret['error']['message']
            print("[+] Error Occur! : {}".format(e))
            result = 0
        else:
            result = 1
    except:
        pass
    return result   

def final_buy(a, b, c):
    if buy(a, b, c):
        print("[+] Buy Success")
        print("="*30)
    else:
        print("[+] Buy Failed")
        print("="*30)
        sys.exit()

def keep():
    while(1):
        f = pyupbit.get_current_price(Name)
        #print("[+] {} 현재 가격 : {}".format(Name, f))
        if my_money():
            check(Name_v2)
            '''
            print("보유 수량 : {}".format(coin_num))
            print("시작 가격 : {}".format(first_price))
            print("현재 가격 : {}".format(f))
            print("더한 가격 : {}".format(first_price + add_money))
            '''
            
            if f >= Price + add_money:
                #print("[+] {} 현재 가격 : {}".format(Name, pyupbit.get_current_price(Name)))
                if sell(Name, f, number):
                    print("[+] Sell Success")
                    print("="*30)
                    while(1): 
                        hang = int(pyupbit.get_current_price(Name))
                        if hang <= Price:
                            final_buy(Name, hang, number)
                            break
                        else:
                            pass
                else:
                    print("[+] Sell Failed")
            else:
                pass
        else:
            pass

if __name__ == '__main__':
    print("="*30)
    final_buy(Name, Price, number)
    keep()
