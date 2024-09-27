import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ClassicFormsComponent } from './classic-forms.component';

describe('ClassicFormsComponent', () => {
  let component: ClassicFormsComponent;
  let fixture: ComponentFixture<ClassicFormsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [ClassicFormsComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ClassicFormsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
