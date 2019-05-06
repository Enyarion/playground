# https://www.codewars.com/kata/sum-of-positive/


def positive_sum(arr):
    return sum(filter(lambda x: x > 0, arr))
