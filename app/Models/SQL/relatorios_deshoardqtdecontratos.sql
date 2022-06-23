select 
    count(case when (DATEDIFF(NOW(),dataFim)*(-1)>30) then 1 else null end) 'noprazo',
    count(case when (DATEDIFF(NOW(),dataFim)*(-1) between 0 and 30) then 1 else null end) 'vencendo',
    count(case when (DATEDIFF(NOW(),dataFim)*(-1)<0) then 1 else null end ) 'vencidos'
from Clientes 
left join Contratos on Clientes.codigo=Contratos.clientecodigo


