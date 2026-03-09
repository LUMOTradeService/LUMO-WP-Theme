import { __ } from '@wordpress/i18n';
import {
	InspectorControls,
	useBlockProps
} from '@wordpress/block-editor';
import { PanelBody, SelectControl } from '@wordpress/components';
import './editor.scss';
import { Icons } from './icons';
/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {
	const { iconName } = attributes;
	const SelectedIcon = Icons[iconName]?.component || Icons.check.component;
	const iconOptions = Object.keys(Icons).map((key) => ({
		value: key,
		label: Icons[key].label
	}));

	return (
		<>
			<InspectorControls>
				<PanelBody title="Nastavení ikony">
					<SelectControl
						label="Vyberte ikonu"
						value={iconName}
						options={iconOptions}
						onChange={(val) => setAttributes({ iconName: val })}
					/>
				</PanelBody>
			</InspectorControls>
			<div {...useBlockProps()}>
				<SelectedIcon width="48px" height="48px" />
			</div>
		</>
	);
}
