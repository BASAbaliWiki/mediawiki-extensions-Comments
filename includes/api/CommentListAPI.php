<?php

class CommentListAPI extends ApiBase {

	public function execute() {
		$commentsPage = new CommentsPage( $this->getMain()->getVal( 'pageID' ), RequestContext::getMain() );
		$commentsPage->orderBy = $this->getMain()->getVal( 'order' );
		$commentsPage->currentPagerPage = $this->getMain()->getVal( 'pagerPage' );


		if ( $this->getMain()->getVal( 'showFormat' ) ) {
			$output = [];
			$cmts = $commentsPage->getComments();
			foreach($cmts as $commentId => $comments) {
				foreach($comments as $comment) {
					$output[] = [
						'comment_id' => $commentId,
						'parent' => $comment->parentID,
						'user' => $comment->username,
						'text' => $comment->getText(),
						'score' => $comment->currentScore
					];
				}
			}
			$result = $this->getResult();
			$result->addValue( $this->getModuleName(), 'result', $output );
			return true;
		}

		$output = '';
		if ( $this->getMain()->getVal( 'showForm' ) ) {
			$output .= $commentsPage->displayOrderForm();
		}
		$output .= $commentsPage->display();
		if ( $this->getMain()->getVal( 'showForm' ) ) {
			$output .= $commentsPage->displayForm();
		}

		$result = $this->getResult();
		$result->addValue( $this->getModuleName(), 'html', $output );
		return true;
	}

	public function getAllowedParams() {
		return [
			'pageID' => [
				ApiBase::PARAM_REQUIRED => true,
				ApiBase::PARAM_TYPE => 'integer'
			],
			'order' => [
				ApiBase::PARAM_REQUIRED => true,
				ApiBase::PARAM_TYPE => 'boolean'
			],
			'pagerPage' => [
				ApiBase::PARAM_REQUIRED => true,
				ApiBase::PARAM_TYPE => 'integer'
			],
			'showForm' => [
				ApiBase::PARAM_REQUIRED => false,
				ApiBase::PARAM_TYPE => 'integer'
			],
			'showFormat' => [
				ApiBase::PARAM_REQUIRED => false,
				ApiBase::PARAM_TYPE => 'integer'
			],
		];
	}
}
