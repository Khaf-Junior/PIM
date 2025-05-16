#include <iostream>
using namespace std;

    int a,compteur = 0;

    int main(){
        cout << " Veuillez saisir une valeur: " ;
        cin >> a;
        
        if(a%2 != 0){
            return 1;
        }else{
            cout << "La somme des k allant de 1 à " << a << " = " << endl;
            for(compteur; compteur<=a; compteur+=2){
            cout << compteur << endl;
        }
        }

        return 0;
    }   