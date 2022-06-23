select 
	Clientes.codigo,
	Clientes.nome,
	Clientes.nomeFantasia,
	Clientes.cpf,
	Clientes.rg,
	Clientes.cnpj,
	Clientes.endereco,
	Clientes.bairro,
	Clientes.cidade,
	Clientes.estado,
	Clientes.cep,
	Clientes.celular,
	Clientes.telefone,
	Clientes.nascimento,
	Clientes.ie
	/**Contratos.codigo,
	Contratos.clienteCodigo,
	Contratos.dataIni,
	Contratos.dataFim,
	Contratos.observacao,
	Contratos.servico,
	Contratos.tipo,
	Contratos.contratoRef,
	DATEDIFF(NOW(),dataFim) dias,
	case when DATEDIFF(NOW(),dataFim)<0 then 'Vencido'
		 when DATEDIFF(NOW(),dataFim)<15 then 'A vencer'
		 else 'No prazo' end status
	**/
from Clientes 
left join Contratos on Clientes.codigo=Contratos.clientecodigo
where DATEDIFF(NOW(),dataFim)>0