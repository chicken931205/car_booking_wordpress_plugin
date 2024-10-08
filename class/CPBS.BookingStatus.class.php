<?php

/******************************************************************************/
/******************************************************************************/

class CPBSBookingStatus
{
	/**************************************************************************/
	
	function __construct()
	{
		$this->bookingStatus=array
		(
		   1=>array(__('Pending (new)','car-park-booking-system')),
		   2=>array(__('Processing (accepted)','car-park-booking-system')),
		   3=>array(__('Cancelled (rejected)','car-park-booking-system')),
		   4=>array(__('Completed (finished)','car-park-booking-system')),
		   5=>array(__('On hold','car-park-booking-system')),
		   6=>array(__('Refunded','car-park-booking-system')),	
		   7=>array(__('Failed','car-park-booking-system'))
		); 			
		
		$this->bookingStatusMap=array
		(
		   1=>'pending',
		   2=>'processing',
		   3=>'cancelled',
		   4=>'completed',
		   5=>'on-hold',
		   6=>'refunded',	
		   7=>'failed'
		);	

		$this->bookingStatusSynchronization=array
		(
		   1=>array(__('No synchronization','car-park-booking-system')),
		   2=>array(__('One way: from wooCommerce to plugin','car-park-booking-system')),
		   3=>array(__('One way: from plugin to wooCommerce','car-park-booking-system'))
		);
	}
	
	/**************************************************************************/

	function getBookingStatus($bookingStatus=null)
	{
		if(is_null($bookingStatus)) return($this->bookingStatus);
		else return($this->bookingStatus[$bookingStatus]);
	}

	/**************************************************************************/

	function isBookingStatus($bookingStatus)
	{
		return(array_key_exists($bookingStatus,$this->getBookingStatus()));
	}

	/**************************************************************************/

	function getBookingStatusSynchronization($bookingStatusSynchronization=null)
	{
		if(is_null($bookingStatusSynchronization)) return($this->bookingStatusSynchronization);
		else return($this->bookingStatusSynchronization[$bookingStatusSynchronization]);
	}

	/**************************************************************************/

	function isBookingStatusSynchronization($bookingStatusSynchronization)
	{
		return(array_key_exists($bookingStatusSynchronization,$this->getBookingStatusSynchronization()));
	}

	/**************************************************************************/

	function mapBookingStatus($bookingStatusId)
	{
		if($this->isBookingStatus($bookingStatusId))
		{
			return($this->bookingStatusMap[$bookingStatusId]);
		}
		else
		{
			return(array_search($bookingStatusId,$this->bookingStatusMap));
		}
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/