#include <stdio.h>
#define tam 4
int main()
{
   int registradorA[] = {0, 0, 1, 1};
   int registradorB[] = {0, 1, 0, 1};
   
    int i, aux;
    
    printf("\nTabela verdade NAND\n");
    for(i=0; i<tam; i++)
    {
        if(registradorA[i] == 1 && registradorB[i] == 1) 
            aux = 0;
        else 
            aux = 1;
        printf("+------------------+\n");
        printf("+ %d | NAND | %d | %d +\n", registradorA[i], registradorB[i], aux);
    }   
}