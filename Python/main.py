from car import Car
from account import Account

if __name__ == "__main__":
    print("Hola mundo")

    car = Car()
    car.license = "AM541"
    car.driver = "Felix Joao"
    print(vars(car)) 

    car2 = Car()
    car2.license = "LVP 001"
    car2.driver = "Van Dijk"
    print(vars(car2))
