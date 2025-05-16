#include <iostream>
using namespace std;

    int a,b;

    int main(){
        cout << "Veuillez saisir un entier : " ;
        cin >> a;
        cout << "Vous avez saisi la valeur de : " << a << endl;
        cout << endl;
        
        cout << "Veuillez saisir un entier : " ;
        cin >> b;
        cout << "Vous avez saisi la valeur de : " << b << endl;
        cout << endl;

        if(a>b){
            cout << a << " > " << b << endl;
        }else if(b>a){
            cout << b << " > " << a << endl;
        }else{
            cout << "Les deux valeurs sont egaux car " << a << " = " << b << endl;
        }

        return 0;
    }