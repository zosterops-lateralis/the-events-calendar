/**
 * External dependencies
 */
import reducer from './reducers';

import { globals } from '@moderntribe/common/utils';
import { editor, plugins } from '@moderntribe/common/data';
import { store } from '@moderntribe/common/store';
import * as blocks from './blocks';
import initSagas from './sagas';

const { actions, constants } = plugins;

const setInitialState = ( entityRecord ) => {
	blocks.setInitialState( entityRecord );
};

export const initStore = () => {
	const unsubscribe = globals.wpData.subscribe( () => {
		const coreSelectors = globals.wpData.select( 'core' );
		const coreEditorSelectors = globals.wpData.select( 'core/editor' );

		/**
		 * @todo: keep an eye on this, unstable function but is also used in block editor core code.
		 */
		if ( ! coreEditorSelectors.__unstableIsEditorReady() ) {
			return;
		}

		unsubscribe();

		if ( ! coreEditorSelectors.isCleanNewPost() ) {
			const postId = coreEditorSelectors.getCurrentPostId();
			const entityRecord = coreSelectors.getEntityRecord( 'postType', editor.EVENT, postId );

			setInitialState( entityRecord );
		}

		const { dispatch, injectReducers } = store;

		initSagas();
		injectReducers( { [ constants.EVENTS_PLUGIN ]: reducer } );
		dispatch( actions.addPlugin( constants.EVENTS_PLUGIN ) );
	} );
};

export const getStore = () => store;

export { blocks };
