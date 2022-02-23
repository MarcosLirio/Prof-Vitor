algoritmo "semnome"
var
 anoNascimento, idade, anoAtual : real

inicio
      escreva("Informe o seu ano de nascimento: ")
      leia(anoNascimento)
      
      escreva("Informe o ano atual: ")
      leia(anoAtual)
      
      idade := (anoAtual - anoNascimento)
      
      escreva("A sua idade é igual á: ", idade , " anos")
fimalgoritmo