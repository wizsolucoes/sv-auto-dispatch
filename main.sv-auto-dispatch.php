<?php

/**
 * Class AutoDispatchTicket
 */
class AutoDispatchTicket implements iMetricComputer
{
	public static function GetDescription()
	{
		return 'Time to auto dispatch a ticket';
	}
	
	/**
	 * @param $oObject DBObject The object for which to compute the dispatch timeout
	 * @return integer Duration in seconds
	 * @throws CoreException
	 */
	public function ComputeMetric($oObject)
	{
		$oSet = new DBObjectSet( DBObjectSearch::FromOQL("SELECT DispatchRule AS DR
JOIN lnkCustomerContractToService AS L1 ON L1.dispatch_id = DR.id
WHERE L1.service_id = :this->service_id"), [], ['this' => $oObject], null, 1);
		$oDispatchRule = $oSet->Fetch();
		
		if ($oDispatchRule)
		{
			return $oDispatchRule->Get('timeout');
		}
	}
}
