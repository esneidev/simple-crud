def sumar(x, y):
    return x + y

def restar(x, y):
    return x - y

def multiplicar(x, y):
    return x * y

def dividir(x, y):
    if y == 0:
        return "Error: División por cero"
    return x / y

def calculadora():
    print("Selecciona una operación:")
    print("1. Sumar")
    print("2. Restar")
    print("3. Multiplicar")
    print("4. Dividir")

    opcion = input("Ingresa la opcion de la operación: ")

    if opcion in ['1', '2', '3', '4']:
        num1 = float(input("Ingresa el primer número: "))
        num2 = float(input("Ingresa el segundo número: "))

        if opcion == '1':
            print(f"{num1} + {num2} = {sumar(num1, num2)}")
        elif opcion == '2':
            print(f"{num1} - {num2} = {restar(num1, num2)}")
        elif opcion == '3':
            print(f"{num1} * {num2} = {multiplicar(num1, num2)}")
        elif opcion == '4':
            print(f"{num1} / {num2} = {dividir(num1, num2)}")
    else:
        print("Opción no válida")

if __name__ == "__main__":
    calculadora()
