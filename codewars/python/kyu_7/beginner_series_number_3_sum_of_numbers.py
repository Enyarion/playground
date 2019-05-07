# https://www.codewars.com/kata/beginner-series-number-3-sum-of-numbers/


def get_sum(a, b):
    a, b = min(a, b), max(a, b)
    return sum(range(a, b + 1))
