﻿using System;


namespace RPG.Class.Item
{
    class Cajado : Arma
    {
        public override int Dano { get { return this.dano; } set { this.dano = value; } }
        private int dano;
        public override string Nome { get { return this.nome; } set { this.nome = value; } }
        private string nome;

        public override int Cura { get { return this.cura; } set { this.cura = value; } }
        private int cura;

        public override int GastoMana { get { return this.gastomana; } set { this.gastomana = value; } }
        private int gastomana;
        public Cajado()
        {
            this.Nome = "Cajado";
            this.Cura = 0;
            this.Dano = 200;
            this.GastoMana = 12;
        }
    }
}
