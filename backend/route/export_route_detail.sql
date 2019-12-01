select src.troute_id,src.tlocation_name as src_location,dest.tlocation_name as dest_location 
,src.troute_kind,vehicle.vtype_name    ,price.tprice_amount as customer , price.tprice_amount_agent as agent
,src.troute_interval,src.troute_status
from
(	select r.troute_id,r.tlocation_id_origin,l.tlocation_name,r.troute_interval,r.troute_kind,r.troute_status
	from travel_route r 
	inner join travel_location l on r.tlocation_id_origin = l.tlocation_id
) as src
inner join (
	select r.troute_id,r.tlocation_id_destination,l.tlocation_name
	from travel_route r 
	inner join travel_location l on r.tlocation_id_destination = l.tlocation_id
) as dest on src.troute_id = dest.troute_id 
inner join travel_price as price on price.troute_id = src.troute_id
inner join vehicle_type vehicle on vehicle.vtype_id = price.vtype_id
;