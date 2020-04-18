altura = float(input('Digite a sua altura em metros: '))
peso = float(input('Digite o seu peso: '))

imc = peso/(altura*altura)

print('Classificação do IMC: ')
if (imc< 18.5):
    print('Magreza.')
if(imc > 18.5 and imc < 24.9):
    print('Normal.')
if (imc > 24.9 and imc < 29.9):
    print('Sobrepeso.')
if(imc > 29.9 and imc<39.9):
    print('Obesidade.')
else:
    print('Obesidade grave.')
