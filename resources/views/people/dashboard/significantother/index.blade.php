<div class="sidebar-box">

  @if (is_null($contact->getCurrentSignificantOther()))

    <p class="sidebar-box-title significantother">
      <img src="/img/people/dashboard/significantother/love.svg">
      <strong>{{ trans('people.significant_other_sidebar_title') }}</strong>
      <a href="/people/{{ $contact->id }}/significantother/add">{{ trans('app.add') }}</a>
    </p>

    <p class="sidebar-box-paragraph">
      {{ trans('people.significant_other_sidebar_blank') }}
    </p>

  @else

    <p class="sidebar-box-title">
      <img src="/img/people/dashboard/significantother/love.svg">
      <strong>{{ trans('people.significant_other_sidebar_title') }}</strong>
    </p>

    {{-- Information about the significant other --}}
    <p class="sidebar-box-paragraph">
      <strong>{{ $contact->getCurrentSignificantOther()->getName() }}</strong>

      @if (! is_null($contact->getCurrentSignificantOther()->getAge()))
      ({{ $contact->getCurrentSignificantOther()->getAge() }})
      @endif

      <a href="/people/{{ $contact->id }}/significantother/{{ $contact->getCurrentSignificantOther()->id }}/edit" class="action-link">{{ trans('app.edit') }}</a>
      <a href="/people/{{ $contact->id }}/significantother/{{ $contact->getCurrentSignificantOther()->id }}/delete" onclick="return confirm('{{ trans('people.significant_other_delete_confirmation') }}');" class="action-link">{{ trans('app.delete') }}</a>
    </p>

  @endif

</div>