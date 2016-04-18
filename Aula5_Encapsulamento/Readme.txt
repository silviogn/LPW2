O encapsulamento é um mecanismo que provê proteção aos membros internos
de um objeto. Existem certas propriedades de uma classe que devem ser 
tratadas exclusivamente por métodos dela mesma, que são implementações 
projetadas para manipular essas propriedades de forma correta. 
 
Visibilidade 
---------------- 
 
private: membros declarados como private somente podem ser acessados 
dentro da própria classe em que foram declarados. 
 
protected: membros declarados como protected somente podem ser acessados 
dentro da própria classe em que foram declarados e a partir de classes
descendentes, mas não poderão ser acessados a partir do programa que
faz uso dessa classe. 
 
pulic: membros declarados como public poderão ser acessados livremente 
a partir da própria classe em que foram declarados, 
a
partir de classes descendentes e a partir do programa que faz uso dessa classe.