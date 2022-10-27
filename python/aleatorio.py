import random

lower_case = "abcdefghijklmnopqrstuvwxyzç"
upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZÇ"
number = "1234567890"
symbols = "!@#$%&*/<>\|?_-"

user_for = lower_case + upper_case + number + symbols
length_for_pass = 17

passaword = "".join(random.sample(user_for, length_for_pass))
print('Sua senha nova é ',passaword)