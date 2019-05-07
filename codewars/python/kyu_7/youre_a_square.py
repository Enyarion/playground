# https://www.codewars.com/kata/youre-a-square/

import math


def is_square(n):
    if n < 0:
        return False
    if math.sqrt(n) % 1:
        return False
    return True
