select DATE_FORMAT(dataFim, "%Y-%m") mes_fim,count(*) qtd 
from Clientes 
left join Contratos on Clientes.codigo=Contratos.clientecodigo
group by DATE_FORMAT(dataFim, "%Y-%m")