#include <iostream>
using namespace std;

    int main(){
        int compteur,n;

        cout << " Veuillez saisir une valeur: "  ;
        cin >> n;
        cout << "Vous avez saisi: " << n << endl;

        cout << "Les " << n << " premiers entiers naturels sont: " << endl;

        for(compteur=0;compteur<n;compteur++){
            cout << compteur << endl;
        }
        
        return 0;
    }