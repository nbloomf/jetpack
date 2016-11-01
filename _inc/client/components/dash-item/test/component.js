/**
 * External dependencies
 */
import React from 'react';
import { expect } from 'chai';
import { shallow } from 'enzyme';

/**
 * Internal dependencies
 */
import { DashItem } from '../index';

describe( 'DashItem', () => {

	let testProps = {
		label: 'Testing',
		status: '',
		statusText: '',
		disabled: true,
		module: 'testing-module',
		pro: true,
		isDevMode: false,
		href: 'https://jetpack.com/',
		isModuleActivated: () => true,
		isTogglingModule: () => true
	};

	const wrapper = shallow( <DashItem { ...testProps } /> );

	it( 'has the right label for header', () => {
		expect( wrapper.find( 'SectionHeader' ) ).to.exist;
		expect( wrapper.find( 'SectionHeader' ).props().label ).to.be.equal( 'Testing' );
	} );

	it( 'the card body is built and has its href property correctly set', () => {
		expect( wrapper.find( 'Card' ) ).to.exist;
		expect( wrapper.find( '.jp-dash-item__card' ).props().href ).to.be.equal( 'https://jetpack.com/' );
	} );

	it( 'the top component has classes properly set when is flagged as disabled', () => {
		let classes = wrapper.find( '.jp-dash-item' ).props().className;
		expect( classes ).to.have.string( 'jp-dash-item' );
		expect( classes ).to.have.string( 'jp-dash-item__disabled' );
	} );

	it( 'displays a PRO button linked to #/plans in cards for a PRO feature when site is not in Dev Mode', () => {
		expect( wrapper.find( 'SectionHeader' ).props().cardBadge.props.href ).to.be.equal( '#/plans' );
	} );

} );