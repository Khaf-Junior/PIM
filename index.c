#include <stdio.h>

    int main(){
       int age;

       printf("Saisir votre age: ");
       scanf("%d",&age);
       

       if(age <= 18 ){
        printf("Vous etes mineure !\n");
       }else{
        printf("Vous etes majeur !");
       }

       
       return 0;
    }