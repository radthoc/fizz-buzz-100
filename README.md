# FizzBuzz

Print the numbers from 1 to 100.

### Rules

- For multiples of three print Fizz instead of the number
- For multiples of five print Buzz
- For numbers which are multiples of both three and five print FizzBuzz

### Instructions

In order to print the series, please execute the command `php artisan custom:fizz-buzz-series`

### Sample-Output

```
1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz
16
17
Fizz
19
Buzz
... etc up to 100
```

### To do list

- Add unit test coverage for the _NumbersHelper_, _RulesProvider_, _FizzRule_, _BuzzRule_, _FizzBuzzRule_
- Add possibility to set the series offset and limit as parameters of the command
- Check formatting (my **PhpStorm** license expired and had to improvise with **Atom**)
- Clean the framework from not needed features
