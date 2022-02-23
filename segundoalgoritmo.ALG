algoritmo "semnome"
/
var
   nota1, nota2,media: real
inicio
   escreva("Insira a primeira nota: ")
   leia(nota1)
   
   escreva("Insira a segunda nota")
   leia(nota2)
   
   media:=(nota1 + nota2)/2
   
   se (media >=6) entao
      escreva("O aluno esta aprovado, com media: ", media)
   senao
        escreva("O aluno está reprovado, com média :" ,media)
   fimse

      
fimalgoritmo