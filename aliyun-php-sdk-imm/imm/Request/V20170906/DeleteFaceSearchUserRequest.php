<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace imm\Request\V20170906;

class DeleteFaceSearchUserRequest extends \RpcAcsRequest
{
    public function  __construct()
    {
        parent::__construct("imm", "2017-09-06", "DeleteFaceSearchUser", "imm", "openAPI");
		$this->setMethod("POST");
    }

    protected $project;

    protected $groupName;

    protected $user;

    public function getProject() {
	    return $this->project;
    }

    public function setProject($project) {
    	$this->project = $project;
    	$this->queryParameters['Project'] = $project;
	}

    public function getGroupName() {
	    return $this->groupName;
    }

    public function setGroupName($groupName) {
    	$this->groupName = $groupName;
    	$this->queryParameters['GroupName'] = $groupName;
	}

    public function getUser() {
	    return $this->user;
    }

    public function setUser($user) {
    	$this->user = $user;
    	$this->queryParameters['User'] = $user;
	}

}
