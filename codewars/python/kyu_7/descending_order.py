# https://www.codewars.com/kata/descending-order/train/python


def Descending_Order(num):
    return int(''.join(sorted([x for x in str(num)], reverse=True)))
