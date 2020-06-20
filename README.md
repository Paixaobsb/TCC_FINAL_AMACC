# TCC_FINAL_AMACC
Código do Sistema Gerenciador de Doações AMACC
depois que aperta em gerar boleto ou doar chama plugin, paypal (chama uma página segura e externa)
cadastro do representante é feito pelo administrador no banco de dados.
sistema só registra doação quando é efetivado a doação.
log_usuario
método será acionado toda vez que tiver qualquer modificaçãona na tabela
COMO É FEITO OS "LOG..." NO BD?
é feito pelo código no sistema se for feito pelo Banco de Dados nao será registrado.
proximo módulo vamos implementar no sistema algumas rotinas automáticas de banco de dados,
 por exeplmo trigger que vamos estudar por isso não implementamos ainda,
que mesmo modificado no Banco de Dados será realizado o log, ai vamos trabalhar entre a trigger e a classe para nao se misturarem.